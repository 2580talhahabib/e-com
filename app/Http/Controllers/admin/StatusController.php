<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function statusChange($stat_id)
{
    // Use find() to get a single model instance
    $customer = Customer::find($stat_id);
    
    if (!$customer) {
        return response()->json([
            'success' => false,
            'message' => 'Customer not found'
        ], 404);
    }

    // Toggle the status
    $customer->update([
        'status' => !$customer->status
    ]);

    return response()->json([
        'success' => true,
        'status' => $customer->status, // boolean
        'status_text' => $customer->status ? 'Active' : 'Inactive',
        'message' => 'Status updated successfully'
    ]);
}
}