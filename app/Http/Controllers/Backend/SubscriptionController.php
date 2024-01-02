<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscription = Subscription::all();
        return view('backend.subscription.index', compact('subscription'));
    }

    public function create()
    {
        return view('backend.subscription.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $subscription=new Subscription();
            $subscription->name=$request->name;
            $subscription->description=$request->description;
            $subscription->duration=$request->duration;
            $subscription->price=$request->price;
         
            if ($subscription->save()) {
                return redirect()->route('subscription.index')->with('success', ' subscription created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create subscription');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    public function edit(string $id)
    { 
        $subscription = Subscription::find($id);
        return view('backend.subscription.edit', compact('subscription'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        try {
         
            $existingSubscription = Subscription::find($subscription->id);
            $existingSubscription->name = $request->input('name');
            $existingSubscription->description = $request->input('description');
            $existingSubscription->duration = $request->input('duration');
            $existingSubscription->price = $request->input('price');
    
        
            if ($existingSubscription->save()) {
                return redirect()->route('subscription.index')->with('success', 'Subscription updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update subscription');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }
    
    public function destroy(subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('subscription.index')->with('success', 'subscription deleted successfully');
    }
}
