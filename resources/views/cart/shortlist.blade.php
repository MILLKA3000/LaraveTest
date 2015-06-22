<div class="block-cart hidden" style="position: absolute;width: 300px;border:1px solid grey;border-radius: 4px;background-color: #f5f5f5;  z-index: 100;top: 40px;">

    <h3 style="margin:10px;">Ваш кошик:</h3>
    @if(count($prod_cart['products'])>0 )

    <table class="table center-block" style="margin: 10px;width:250px">
        <tbody class="list-group-item-success">
        <tr>
            <td width="220" style="width: 250px">Продукт</td>
            <td>Кількість</td>
            <td>Ціна</td>
            <td></td>
        </tr>
        </tbody>

    @foreach($prod_cart['products'] as $prod)
        <tr>
            <td>
                {{$prod->name}}
            </td>

            <td>
                {{$prod->qty}}шт.
            </td>

            <td>
                {{$prod->total_price_one_qty($prod)*$prod->qty}}грн.
            </td>

            <td>
                <span class="text-danger">X</span>
            </td>
        </tr>
    @endforeach
        <tr style="border-top: 2px solid">
            <td colspan="2">Загальна ціна:</td>
            <td colspan="2">
                {{$prod_cart['total_price']}}грн.
            </td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary center-block" style="margin-bottom: 20px;">
        Оформити заказ
    </button>
    @endif
</div>