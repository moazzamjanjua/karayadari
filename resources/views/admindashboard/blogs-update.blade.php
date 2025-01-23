<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Styles for blog content links */
.blog-content a {
    color: blue; /* Change the color to blue */
    text-decoration: none; /* Remove underline from links */
}

.blog-content a:hover {
    text-decoration: underline; /* Underline links on hover */
}

</style>
</head>
<body>
    <div class="container mt-5">
        <h2>Update Blog</h2>

        <!-- Blog submission form -->
        <form action="{{ route('admin.update-blog', $blog->id) }}" method="POST" enctype="multipart/form-data" id="blogForm">
            @csrf
            <div class="form-group">
                <label for="blog_title">Blog Title</label>
                <input type="text" class="form-control" id="blog_title" name="blog_title" required value="{{ $blog->blog_title }}">
                @error('blog_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="blog_image">Upload Image</label>
                <input type="file" class="form-control-file" id="blog_image" name="blog_image" accept="image/*">
                 @if($blog->blog_image)
                    <div class="image-container">
                        <img src="{{ asset('storage/blog_image/' . $blog->blog_image) }}" alt="Blog Image" class="img-fluid">
                    </div>
                @endif
                @error('blog_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="editor">Blog Content</label>
                <textarea id="editor" name="blog_content">{{ $blog->blog_content }}</textarea>
                @error('blog_content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div>
        <label for="blog_tags">Blog Tags (comma separated):</label>
        <input type="text" id="blog_tags" name="blog_tags" placeholder="hostel life, student accommodation, community events">
    </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Include TinyMCE editor -->
    <script src="https://cdn.tiny.cloud/1/kck82kzfyagetzax9p0ss79pzbqq3kndkoo7f6qv01vp2dvf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Initialize TinyMCE editor
        tinymce.init({
            selector: '#editor',
            plugins: 'lists link image code',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            menubar: false,
            branding: false,
            // Allow TinyMCE to save the HTML tags (e.g., <p>, <strong>)
            content_css: 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'
        });

        // Handle form submission
        document.querySelector('#blogForm').addEventListener('submit', function() {
            const content = tinymce.get('editor').getContent(); // Get HTML content, not plain text
            document.querySelector('textarea[name="blog_content"]').value = content; // Set the content for submission
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
