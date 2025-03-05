<div>
    <table>
        <tr>
            <td>
                <select name="" value="">
                    <option >Select Info Type</option>
                    @isset($OtherInfoTypes)
                        @foreach ($OtherInfoTypes as $infotype)
                            <option value="{{$infotype->id}}">{{$infotype->name}}</option>
                        @endforeach
                    @endisset
                </select>
            </td>
        </tr>
    </table>
</div>
