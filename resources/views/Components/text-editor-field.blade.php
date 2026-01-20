<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    class="form-control tinymce @error($name) is-invalid @enderror"
>{!! $value !!}</textarea>

<script src="https://cdn.tiny.cloud/1/hmdrry4ytm0f0wokteb8vse0t1j1jbnplbw7dmupbj37kgik/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Only remove the instance if it already exists
        if (tinymce.get('{{ $name }}')) {
            tinymce.get('{{ $name }}').remove();
        }

        // Initialize TinyMCE
        tinymce.init({
            selector: '#{{ $name }}',
            height: 300,
            menubar: true,
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat'
        });
    });
</script>




