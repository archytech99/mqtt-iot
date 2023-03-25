<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="border rounded border-gray-300 dark:border-gray-700 bg-white w-100 p-4">
                            <canvas id="suhu"></canvas>
                        </div>
                        <div class="border rounded border-gray-300 dark:border-gray-700 bg-white w-100 p-4">
                            <canvas id="kelembaban"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="module">
    const idSuhu = document.getElementById('suhu');
    new Chart(idSuhu, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Suhu',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(0, 163, 0)',
                tension: 0.5
            }]
        },
    });
</script>

<script type="module">
    const idKelembaban = document.getElementById('kelembaban');
    new Chart(idKelembaban, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Kelembaban',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(45, 137, 239)',
                tension: 0.5
            }]
        },
    });
</script>