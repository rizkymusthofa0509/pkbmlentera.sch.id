/*
 Template Name: Ubazo - Admin & Dashboard Template
 Author: Myra Studio
 File: Dashboard
*/

$(function () {
    'use strict';

    if ($("#morris-donut-example").length) {
        Morris.Donut({
            element: 'morris-donut-example',
            resize: true,
            backgroundColor: 'transparent',
            colors: ['#346ee0', '#4336cf', '#e9ecef'],
            data: [{
                label: "Samsung Company",
                value: 12
              },
              {
                label: "Apple Company",
                value: 30
              },
              {
                label: "Vivo Mobiles",
                value: 20
              }
            ]
        });
    }

    if ($('#morris-line-example').length) {
        Morris.Line({
            element: 'morris-line-example',
            gridLineColor: '#eef0f2',
            lineColors: ['#f15050', '#346ee0', "#e9ecef"],
            data: [
                {
                    y: '2006',
                    a: 80,
                    b: 100,
                    c: 45
                },
                {
                    y: '2007',
                    a: 110,
                    b: 130,
                    c: 52
                },
                {
                    y: '2008',
                    a: 90,
                    b: 110,
                    c: 68
                },
                {
                    y: '2009',
                    a: 120,
                    b: 140,
                    c: 58
                },
                {
                    y: '2010',
                    a: 110,
                    b: 125,
                    c: 32
                },
                {
                    y: '2011',
                    a: 170,
                    b: 190,
                    c: 45
                },
                {
                    y: '2012',
                    a: 120,
                    b: 140,
                    c: 58
                },
                {
                    y: '2013',
                    a: 80,
                    b: 100,
                    c: 68
                },
                {
                    y: '2014',
                    a: 110,
                    b: 130,
                    c: 78
                },
                {
                    y: '2015',
                    a: 90,
                    b: 110,
                    c: 62
                },
                {
                    y: '2016',
                    a: 120,
                    b: 140,
                    c: 55
                },
                {
                    y: '2017',
                    a: 110,
                    b: 125,
                    c: 45
                },
                {
                    y: '2018',
                    a: 170,
                    b: 190,
                    c: 32
                },
                {
                    y: '2019',
                    a: 120,
                    b: 140,
                    c: 45
                },
                {
                    y: '2020',
                    a: 120,
                    b: 140,
                    c: 58
                }
            ],
            xkey: 'y',
            ykeys: ['a', 'b', 'c'],
            hideHover: 'auto',
            resize: true,
            labels: ['Product A', 'Product B', 'Product C']
        });
    }
});

$( document ).ready(function() {
    
  var DrawSparkline = function() {
      $('#sparkline1').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
          type: 'line',
          width: "100%",
          height: '50',
          chartRangeMax: 35,
          lineColor: '#2e7ce4',
          fillColor: 'rgba(46, 124, 228, 0.3)',
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)',
          maxSpotColor:false,
          minSpotColor: false,
          spotColor:false,
          lineWidth: 1
      });

      $('#sparkline2').sparkline([24, 25, 32, 30, 24, 19, 32, 35, 23], {
          type: 'line',
          width: "100%",
          height: '50',
          chartRangeMax: 35,
          lineColor: '#627898',
          fillColor: 'rgba(98, 120, 152, 0.3)',
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)',
          maxSpotColor:false,
          minSpotColor: false,
          spotColor:false,
          lineWidth: 1
      });

      $('#sparkline3').sparkline([30, 24, 19, 32, 35, 23, 12, 25, 35], {
          type: 'line',
          width: "100%",
          height: '50',
          chartRangeMax: 35,
          lineColor: '#f1bf43',
          fillColor: 'rgba(241, 191, 67, 0.3)',
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)',
          maxSpotColor:false,
          minSpotColor: false,
          spotColor:false,
          lineWidth: 1
      });

      $('#sparkline4').sparkline([23, 12, 25, 35, 23, 12, 25, 35], {
          type: 'line',
          width: "100%",
          height: '50',
          chartRangeMax: 35,
          lineColor: '#df3554',
          fillColor: 'rgba(223, 53, 84, 0.3)',
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)',
          maxSpotColor:false,
          minSpotColor: false,
          spotColor:false,
          lineWidth: 1
      });
      
    };
  
  DrawSparkline();
  
  var resizeChart;

  $(window).resize(function(e) {
      clearTimeout(resizeChart);
      resizeChart = setTimeout(function() {
          DrawSparkline();
      }, 300);
  });
});
