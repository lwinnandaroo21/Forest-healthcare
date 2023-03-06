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
        label: 'Booking Range',
        backgroundColor: 'rgb(54, 162, 235)',
        borderColor: 'rgb(54, 162, 235)',
        data: apptDataList,
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
