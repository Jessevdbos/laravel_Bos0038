@extends('common.layout')

@section('title')
    <title>Post - page</title>
@endsection

@section('content')
    <section style="margin-top: 5%">
        <div class="container">
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary"><i class="fa fa-external-link"></i> Edit
                Post...</a>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="fa fa-external-link"></i> Posts</a>
        </div>
    </section>
    <hr>
    <section>
        <div class="container project-item">
            <div class="align-items-center">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                            </div>
                        </div>
                        <div id="columnchart_values" style="width: 400px; height: 150px; position: relative; left: -15vh"></div>
                        <div class="col-md-4">
                            <img src="{{ $post->image }}" class="card-img" alt="Project Afbeelding">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jesse", 0, "#b87333"],
                ["Bassie", {{$posts}}, "color: #ffd700"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Aantal bitches",
                width: 600,
                height: 400,
                bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>
@endsection
