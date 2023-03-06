
// linechart start
// const data1 = {
//   labels: [
//     'October',
//     'November',
//     'December',
//     'January',
//     'February',
//     'March',
//     'April'
//   ],
//   datasets: [{
//     label: 'Booking Range',
//     backgroundColor: 'rgb(255, 99, 132)',
//     borderColor: 'rgb(255, 99, 132)',
//     data: [10, 0, 0, 0, 0, 0, 45],
//   }]
// };

// const config1 = {
//   type: 'line',
//   data: data,
//   options: {}
// };

// const myChart1 = new Chart(
//   document.getElementById('myChart1'),
//   config
// );
// linechart end

// piechart start
const data = {
  labels: ['Kid', 'Over 18', 'Over 65'],
  datasets: [
    {
      label: 'Dataset 1',
      data: pieData,
      backgroundColor: ["red","green","blue"],
    }
  ]
};
const config = {
  type: 'pie',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Pie Chart'
      }
    }
  },
};

const myChart = new Chart(
  document.getElementById('myChart'),
  config
);
// piechart end




