
<div class="m-4 " >
    <!-- Well begun is half done. - Aristotle -->
    <form action="{{route('adminproducts.adminfilter')}}" method="post" class="rounded-lg">
      @csrf
      <select name="filteroptions" id="" placeholder="select filter" class="rounded-lg">
        select
        <option value="0">filter</option>
        <option name="is_featured" value="is_featured">featured products</option>
        <option  name="is_stock" value="is_stock">in stock products</option>
      </select>
      <button type="submit">submit</button>
    </form>
</div>
