<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'postCount' => Post::count(),
            'orderCount' => Order::count(),
            'userCount' => User::count(),
            'latestOrders' => Order::latest()->take(5)->get(),
            'posts' => Post::latest()->with('user')->take(5)->get()
        ]);
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);

        return back()->with('status', 'Post created successfully!');
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
            'status' => 'required|in:pending,processing,completed,cancelled'
        ]);

        Order::create([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'status' => $request->status,
            'user_id' => auth()->id()
        ]);

        return back()->with('status', 'Order created successfully!');
    }

    public function destroyOrder(Order $order)
    {
        try {
            $order->delete();
            return back()->with('status', 'Order deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete order: ' . $e->getMessage());
        }
    }

    // Your existing clear methods...
    public function clear()
    {
        DB::transaction(function () {
            Post::truncate();
            Order::truncate();
            User::truncate();
        });
        return redirect()->route('dashboard')->with('status', 'All data cleared.');
    }

    public function clearPosts()
    {
        Post::truncate();
        return back()->with('status', 'All posts cleared.');
    }

    public function clearOrders()
    {
        Order::truncate();
        return back()->with('status', 'All orders cleared.');
    }

    public function clearUsers()
    {
        User::where('id', '!=', auth()->id())->delete();
        return back()->with('status', 'All users except you have been cleared.');
    }
    public function editPost(Post $post)
    {
        return view('dashboard.post-edit', compact('post'));
    }

    public function updatePost(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('dashboard')->with('status', 'Post updated successfully!');
    }

// Order edit/update methods
    public function editOrder(Order $order)
    {
        return view('dashboard.orders.edit', compact('order'));
    }

    public function updateOrder(Request $request, Order $order)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,processing,completed,cancelled'
        ]);

        // Debug: Check what status is being submitted
        logger('Submitted status:', ['status' => $request->status]);

        $order->update([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'status' => $request->status
        ]);

        return redirect()->route('dashboard')->with('status', 'Order updated successfully!');
    }
}
