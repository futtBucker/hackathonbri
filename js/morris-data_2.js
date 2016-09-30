$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '1',
            pendapatan: 2666,
            pengeluaran: 2647
        }, {
            period: '2',
            pendapatan: 2778,
            pengeluaran: 2441
        }, {
            period: '3',
            pendapatan: 4912,
            pengeluaran: 2501
        }, {
            period: '4',
            pendapatan: 3767,
            pengeluaran: 5689
        }, {
            period: '5',
            pendapatan: 9810,
            pengeluaran: 2293
        }, {
            period: '6',
            pendapatan: 5670,
            pengeluaran: 1881
        }, {
            period: '7',
            pendapatan: 4820,
            pengeluaran: 1588
        }, {
            period: '8',
            pendapatan: 15073,
            pengeluaran: 4175
        }, {
            period: '9',
            pendapatan: 8687,
            pengeluaran: 1028
        }, {
            period: '10',
            pendapatan: 8432,
            pengeluaran: 1791
        }, {
            period: '11',
            pendapatan: 10687,
            pengeluaran: 2028
        }, {
            period: '12',
            pendapatan: 10687,
            pengeluaran: 2028
        }],
        xkey: 'period',
        ykeys: ['pendapatan', 'pengeluaran'],
        labels: ['Pendapatan', 'Pengeluaran'],
        lineColors: ['red','blue'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        parseTime: false
    });
    
    Morris.Area({
        element: 'morris-area-chart-2',
        data: [{
            period: '1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '5',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '6',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '7',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '8',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '9',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '10',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }, {
            period: '11',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '12',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        lineColors: ['yellow','blue','green'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        parseTime: false
    });
    
    Morris.Area({
        element: 'morris-area-chart-3',
        data: [{
            period: '1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '5',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '6',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '7',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '8',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '9',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '10',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }, {
            period: '11',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '12',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        lineColors: ['purple','blue','green'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        parseTime: false
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Pengeluaran",
            value: 567000,
            color: "red"
        }, {
            label: "Pendapatan",
            value: 1030000,
            color: "blue"
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'Jan',
            a: 100,
            b: 90
        }, {
            y: 'Feb',
            a: 75,
            b: 65
        }, {
            y: 'Mar',
            a: 50,
            b: 40
        }, {
            y: 'Apr',
            a: 75,
            b: 65
        }, {
            y: 'Mei',
            a: 50,
            b: 40
        }, {
            y: 'Jun',
            a: 75,
            b: 65
        }, {
            y: 'Jul',
            a: 100,
            b: 90
        }, {
            y: 'Agt',
            a: 100,
            b: 90
        }, {
            y: 'Sep',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        xLabelMargin: 10,
        resize: true
    });
    
});
