<section class="bg-live">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center price">
                <h1 style="font-size:  30px; text-align:center;">One-way | Bitcoin</h1>
                <span class="section-divider mb15"></span>
            </div>
        </div>
        
        <div id="order">
            <div class="text-center">
                <input type="checkbox" id="hideneg" v-model="hideNegative">
                <label for="hideneg" style="font-size: 120%; padding-top: 20px;">Hide Negative</label>
            </div>
            <div class="col-md-12" style="padding-left:20px; padding-right:20px;">
                <div id="app">
                    <div id="order" class="table-responsive">
                        <table class="text-center " style=" vertical-align: middle; border-collapse: unset !important; border-spacing: 10px; table-layout: fixed; width:100%; padding: 5px;">
                           
                                <td class="nostyle"></td>
                                <td class="nostyle"></td>
                                <td v-for="orderbook in orderbooks" @mouseover="axisPointer(orderbook.id)" :class="orderbook.id == cellColumn ? 'isHighlighted':''">
                                    <a :href="orderbook.link">
                                        <img :src="orderbook.logo" style="width:80px;"></img>  
                                    </a>
                                </td>
                
                            <tr v-for="orderbook_row in orderbooks" >
                                <td class="nostyle"></td>
                                <td :class="orderbook_row.id == cellRow ? 'isHighlighted':''">
                                    <a :href="orderbook_row.link">
                                        <img :src="orderbook_row.logo" style="width:80px;"></img>  
                                    </a>
                                </td>
                                <td v-for="orderbook_column in orderbooks"  @mouseover="selectCell(orderbook_column.id, orderbook_row.id)" 
                                :class="((orderbook_column.id <= cellColumn && orderbook_row.id == cellRow) || (orderbook_column.id == cellColumn && orderbook_row.id <= cellRow))  ? 'isHighlighted' : ''" :style="((orderbook_column.btcusd.bid-orderbook_row.btcusd.ask)/orderbook_column.btcusd.bid*100).toFixed(2) < 0 ? 'background-color:#ffe7e7': 'background-color:rgb(50,205,50,0.15)'">                                      
                                    @{{ ((orderbook_column.btcusd.bid-orderbook_row.btcusd.ask)<0 && hideNegative)? '-': ((orderbook_column.btcusd.bid-orderbook_row.btcusd.ask)/orderbook_column.btcusd.bid*100).toFixed(2) }}                                    
                                </td>                                  
                            </tr>                                
                        </table>                            
                    </div>
                </div>
            </div>
        </div>
    <section>

        <style>
            .isHighlighted {
                box-shadow:  0 2px 4px #808080;
                transition: all 0.1s ease-in-out;
                transform:scale(1.05);
            }
            .isSelected {
                background-color: green;
            }
        </style>

         <script>
        var socket = io.connect('https://socketliveprice.cryptovationx.io:8443', {
            secure: true
        });

        new Vue({
            el: '#order',

            data: {
                orderbooks: {},
                hideNegative: false,
                cellColumn : '',
                cellRow : '',
                xAxis: '',
                yAxis: '',
                hideNegative: false
            },

            mounted: function () {

                socket.on('orderbooks-channel:App\\Events\\OrderbookOmit', function (data) {

                    this.orderbooks = JSON.parse(data.orderbooks);
                    console.log(this.orderbooks);

                }.bind(this));
            },

            methods: {
                    selectCell(cellColumn, cellRow){
                        this.cellColumn = cellColumn;
                        this.cellRow = cellRow;
                        console.log(cellColumn,cellRow);
                    },        
                    axisPointer(x_axis, y_axis){
                       this.x_axis = x_axis;
                       this.y_axis = y_axis;
                        console.log(x_axis, y_axis);
                    }                 
            },

        });
    </script>