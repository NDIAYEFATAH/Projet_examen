@extends('admin')
@section('guichet')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Single Line Chart</h6>
                    <canvas id="transactions-chart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Multiple Line Chart</h6>
                    <canvas id="salse-revenue"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Single Bar Chart</h6>
                    <canvas id="transaction-chart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Multiple Bar Chart</h6>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Pie Chart</h6>
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Doughnut Chart</h6>
                    <canvas id="doughnut-chart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const transactionsCountByDay = {!! json_encode($transactionsCountByDay->toArray()) !!};
        const labels = Object.keys(transactionsCountByDay);
        const data = Object.values(transactionsCountByDay);

        const ctx = document.getElementById('transactions-chart').getContext('2d');
        const transactionsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nombre de transactions par jour',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        {{--const labels = {!! $labels !!};--}}
        {{--const data = {!! $data !!};--}}

        {{--// Créer un nouveau graphe avec Chart.js--}}
        {{--const ctx = document.getElementById('transaction-chart').getContext('2d');--}}
        {{--const transactionsChart = new Chart(ctx, {--}}
        {{--    type: 'bar',--}}
        {{--    data: {--}}
        {{--        labels: labels,--}}
        {{--        datasets: [{--}}
        {{--            labels: 'Nombre de transactions par utilisateur',--}}
        {{--            data: data,--}}
        {{--            backgroundColor: 'rgba(75, 192, 192, 0.2)',--}}
        {{--            borderColor: 'rgba(75, 192, 192, 1)',--}}
        {{--            borderWidth: 1--}}
        {{--        }]--}}
        {{--    },--}}
        {{--    options: {--}}
        {{--        scales: {--}}
        {{--            y: {--}}
        {{--                beginAtZero: true--}}
        {{--            }--}}
        {{--        }--}}
        {{--    }--}}
        {{--});--}}
    </script>
@endsection
