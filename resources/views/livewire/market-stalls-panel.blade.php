<div>
    @isset($market_id)
    <form action="">
        <table>
            <tr>
                <td>Stall Category</td>
                <td>Number of Stalls</td>
                <td>Number of Vendors</td>
            </tr>
            <tr>
                <td>
                    <select name="" id="">
                        @isset($stallCategories)
                            @foreach ($stallCategories as $stallCategory)
                                <option value="{{$stallCategory->id}}">{{$stallCategory->category_name}}</option>
                            @endforeach
                        @endisset
                    </select>
                </td>
                <td><input type="number" step="any" /></td>
                <td><input type="number" step="any" /></td>
                <td><input type="submit" value="Add" /></td>
            </tr>
        </table>
    </form>


    {{$market_id}}


    @endisset
</div>
