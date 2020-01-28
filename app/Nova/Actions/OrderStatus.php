<?php

namespace App\Nova\Actions;

use Auth;
use Laravel\Nova\Nova;
use Illuminate\Bus\Queueable;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\Textarea;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\ActionFields;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderStatus extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = "Change Status";

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $status = ['New','Hold','Delivered','Cancel'];

        foreach ($models as $model) {
            $key = array_search($model->order_status, $status);
            $key = $key + 1;
            $model->order_status = $status[$key];
            Nova::actionEvent()->forResourceUpdate(Auth::user(), $model)->save();
            $model->save();

        }
        
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
             Textarea::make('message'),
        ];
    }
}
