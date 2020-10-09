<?php

namespace App\Http\Controllers\API;

use App\models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SubscriptionsController extends BaseController
{

    private function generateSubscriptions()
    {
        return [ new Subscription('1', 'chargebee111', 'active', '1'),
            new Subscription('2', 'chargebee2', 'active', '2'),
            new Subscription('3', 'chargebee3', 'active', '3'),
            new Subscription('4', 'chargebee4', 'active', '4')
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $subscriptions = $this->generateSubscriptions();
        return response()->json(($subscriptions));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $subscriptions = $this->generateSubscriptions();
        $sub = array_filter($subscriptions, function (Subscription $subscription) use ($id) {
           return $subscription->id === $id;
        });

      //  var_dump($sub);
        return response()->json($sub);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
