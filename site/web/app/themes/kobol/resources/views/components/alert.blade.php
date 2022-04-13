<div {{ $attributes->merge(['class' => $type]) }}>
  @php $message ?? $slot @endphp
</div>
