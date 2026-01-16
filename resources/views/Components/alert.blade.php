@props(['type' => 'success', 'message'])

<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    <strong>{{ ucfirst($type) }}! </strong> {{ $message }}
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

