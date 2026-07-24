
<div>
    <!-- Well begun is half done. - Aristotle -->
    <form action="{{route('adminproducts.adminfilter')}}" method="post">
      @csrf
      <select name="filteroptions" id="" placeholder="select filter">
        select
        <option value="0">filter</option>
        <option name="is_featured" value="is_featured">featured products</option>
        <option  name="is_stock" value="is_stock">in stock products</option>
      </select>
      <button type="submit">submit</button>
    </form>
</div>
