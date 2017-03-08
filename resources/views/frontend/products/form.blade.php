<form id="form-add-wishlist" action="{{ route('wishlist.add') }}"
      method="POST" style="display: none;">
    {{ csrf_field() }}
    <input id="form-user" type="hidden" name="user_id" value="">
    <input id="form-name" type="hidden" name="name" value="">
    <input id="form-url" type="hidden" name="product_url" value="">
</form>