<form id="form-delete" action="{{ route('wishlist.delete') }}"
      method="POST" style="display: none;">
    {{ csrf_field() }}
    <input id="form-id" type="hidden" name="id" value="">
</form>