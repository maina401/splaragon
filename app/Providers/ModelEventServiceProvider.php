<?php

namespace App\Providers;

use App\Models\AuditLog;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class ModelEventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        Event::listen(['eloquent.updated*'], function ($eventName, $data) {
            //create new audit log
            try {
                foreach ($data as $datum) {
                    if (get_class($datum) == AuditLog::class||get_class($datum) == \Session::class) {
                        return;
                    }
                    AuditLog::create([
                        'item' => get_class($datum),
                        'action' => $eventName,
                        'user_id' => auth()->user()->id,
                        'item_id' => $datum->id,
                        'change' => $datum->getChanges(),
                    ]);
                }
            }catch (\Exception $exception){
                \Log::warning("Unable to save audit Log! -------> ".$exception->getMessage());
            }
        });
    }
}
