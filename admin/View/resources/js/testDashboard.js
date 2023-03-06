//line chart start
const data = {
    labels: [
        'October',
        'November',
        'December',
        'January',
        'February',
        'March',
    ],
    datasets: [{
        label: 'Visitors',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: datalist,
    },
    {
        label: 'Users',
        backgroundColor: 'blue',
        borderColor: 'blue',
        data: [10, 0, 5, 2, 10, 15],
    }]

};

const config = {
    type: 'line',
    data: data,
    options: {}
};

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
//line chart end

//age pie chart start
// const dataPie = {
//     labels: ['Kid', 'Over 18', 'Over 65'],
//     datasets: [{
//         label: 'My First Dataset',
//         data: [30, 50, 10],
//         backgroundColor: [
//             'rgb(255, 99, 132)',
//             'rgb(54, 162, 235)',
//             'rgb(255, 205, 86)'
//         ],
//         hoverOffset: 4
//     }]
// };

// const configPie = {
//     type: 'pie',
//     data: dataPie,
// };

// const myChartPie = new Chart(
//     document.getElementById('myChartPie'),
//     configPie
// );

const dataPie = {
    labels: ['Kid', 'Over 18', 'Over 65'],
    datasets: [{
        label: 'My First Dataset',
        data: pieData,
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
    }]
};

const configPie = {
    type: 'pie',
    data: dataPie,
};

const myChartPie = new Chart(
    document.getElementById('myChartPie'),
    configPie
);
//age pie chart end


//gender pie chart start
// const dataPie1 = {
//     labels: ['Man', 'Woman', 'Other'],
//     datasets: [{
//         label: 'My First Dataset',
//         data: [30, 50, 10],
//         backgroundColor: [
//             'rgb(255, 99, 132)',
//             'rgb(54, 162, 235)',
//             'rgb(255, 205, 86)'
//         ],
//         hoverOffset: 4
//     }]
// };

// const configPie1 = {
//     type: 'pie',
//     data: dataPie1,
// };

// const myChartPie1 = new Chart(
//     document.getElementById('myChartPie1'),
//     configPie1
// );

const dataPie1 = {
    labels: ['Man', 'Woman', 'Other'],
    datasets: [{
        label: 'My  Dataset',
        data: pieData1,
        backgroundColor: [
            '#264653',
            '#2A9D8F',
            '#F4A261'
        ],
        hoverOffset: 4
    }]
};

const configPie1 = {
    type: 'pie',
    data: dataPie1,
};

const myChartPie1 = new Chart(
    document.getElementById('myChartPie1'),
    configPie1
);
//gender pie chart end