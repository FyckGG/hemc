@push('css')
<link href="{{asset('css/characteristics-table.css') }}" type="text/css" rel="stylesheet">
@endpush

@props(['characteristics' => null])
<div class="mt-5">
    {!! $characteristics !!}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>Company</th>--}}
{{--            <th>Contact</th>--}}
{{--            <th>Country</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Alfreds Futterkiste</td>--}}
{{--            <td>Maria Anders</td>--}}
{{--            <td>Germany</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Centro comercial Moctezuma</td>--}}
{{--            <td>Francisco Chang</td>--}}
{{--            <td>Mexico</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Ernst Handel</td>--}}
{{--            <td>Roland Mendel</td>--}}
{{--            <td>Austria</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Island Trading</td>--}}
{{--            <td>Helen Bennett</td>--}}
{{--            <td>UK</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Laughing Bacchus Winecellars</td>--}}
{{--            <td>Yoshi Tannamuri</td>--}}
{{--            <td>Canada</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Magazzini Alimentari Riuniti</td>--}}
{{--            <td>Giovanni Rovelli</td>--}}
{{--            <td>Italy</td>--}}
{{--        </tr>--}}
{{--    </table>--}}
</div>
