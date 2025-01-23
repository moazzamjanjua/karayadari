

  

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdn.tiny.cloud/1/kck82kzfyagetzax9p0ss79pzbqq3kndkoo7f6qv01vp2dvf/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
	</head>
<body>
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
	
    <div class="container mt-5">
        <h2>Submit a Blog Post</h2>

        <!-- Blog submission form -->
        <form action="admin-dashboard" method="POST" enctype="multipart/form-data" id="blogForm">
            @csrf
            <div class="form-group">
                <label for="blog_title">Blog Title</label>
                <input type="text" class="form-control" id="blog_title" name="blog_title" required value="{{ old('blog_title') }}">
                @error('blog_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="blog_image">Upload Image</label>
                <input type="file" class="form-control-file" id="blog_image" name="blog_image" accept="image/*">
                @error('blog_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="editor">Blog Content</label>
                <textarea id="editor" name="blog_content" placeholder="Write your content in Markdown..."></textarea>

                @error('blog_content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

			<div>
        <label for="blog_tags">Blog Tags (comma separated):</label>
        <input type="text" id="blog_tags" name="blog_tags" placeholder="hostel life, student accommodation, community events">
    </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.tiny.cloud/1/kck82kzfyagetzax9p0ss79pzbqq3kndkoo7f6qv01vp2dvf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Initialize TinyMCE editor
		tinymce.init({
    selector: '#editor',
    plugins: 'lists link image',
    toolbar: 'undo redo | bold italic | bullist numlist | link image',
    menubar: false,
    branding: false,
    setup: function (editor) {
        editor.on('init', function () {
            editor.setContent('Write your content in Markdown...');
        });
    }
});

        // Handle form submission
        document.querySelector('#blogForm').addEventListener('submit', function(e) {
            const content = tinymce.get('editor').getContent({format: 'text'}); // Get plain text without HTML
            document.querySelector('textarea[name="blog_content"]').value = content; // Set the text for submission

            if (!content.trim()) {
                alert('Blog content cannot be empty!');
                e.preventDefault();
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>