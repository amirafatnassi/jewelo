<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // List all blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    // Show form to create a blog
    public function create()
    {
        $categories = [
            'Jewellery Trends',
            'Styling Tips',
            'Gifting Ideas',
            'Behind the Scenes',
            'Customer Stories',
            'Care & Maintenance',
            'Designer Spotlight',
        ];

        return view('blogs.create', compact('categories'));
    }

    // Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|in:Jewellery Trends,Styling Tips,Gifting Ideas,Behind the Scenes,Customer Stories,Care & Maintenance,Designer Spotlight',
        ]);

        $blog = new Blog($request->only(['title', 'content', 'category']));

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->user_id = auth()->id(); // current logged-in user as author
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    // Show one blog
    public function show($id)
    {
        $blog = Blog::findorFail($id);
        return view('blogs.show', compact('blog'));
    }

    // Edit form
    public function edit(Blog $blog)
    {
        $this->authorize('update', $blog); // optional: if using policies

        $categories = [
            'Jewellery Trends',
            'Styling Tips',
            'Gifting Ideas',
            'Behind the Scenes',
            'Customer Stories',
            'Care & Maintenance',
            'Designer Spotlight',
        ];

        return view('blogs.edit', compact('blog', 'categories'));
    }

    // Update blog
    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update', $blog);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|in:Jewellery Trends,Styling Tips,Gifting Ideas,Behind the Scenes,Customer Stories,Care & Maintenance,Designer Spotlight',
        ]);

        $blog->fill($request->only(['title', 'content', 'category']));

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Delete blog
    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
