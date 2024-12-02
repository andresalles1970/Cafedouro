google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

     
      var data = google.visualization.arrayToDataTable([
        ['Paises', 'População', { role: 'style' }, { role: 'annotation' } ],
        ['EUA', 331.9, 'blue', '' ],
        ['Brasil', 214.3, 'blue', '' ],
        ['Canada', 39.5, 'blue', '' ],
        
     ]);

      var options = {
        title: 'População dos Paises',
        hAxis: {
          title: 'Em Milhões',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'População'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('bar_div'));

      chart.draw(data, options);
    }