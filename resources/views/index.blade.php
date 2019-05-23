<!DOCTYPE html>
<html lang="en">
<link href="/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/neo4jd3.min.css" rel="stylesheet" type="text/css">

<style>
    body,
    html,
    .neo4jd3 {
        height: 100%;
        overflow: hidden;
    }

</style>


<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="navbar-search" action="" method="GET">
        <div class="input-group">
            <input name="key" type="text" class="form-control bg-light border-0" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

</nav>

<div id="neo4jd3">

</div>
</body>

<script src="https://d3js.org/d3.v4.js"></script>
<script src="/js/neo4jd3.min.js"></script>

<script>

    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }

    var from = getQueryString("key");

    if(from){
        from = '/api/data?key=' + from;
    }
    else{
        from = '/api/data';
    }

    var neo4jd3 = new Neo4jd3('#neo4jd3', {
        highlight: [
            {
                class: 'Branch'
            }, {
                class: 'Commit',
            }
        ],
        icons: {
            'Api': 'gear',
            'Commit': 'git',
            'File': 'file',
            'Branch': 'language',
            'Class': 'sliders',
            'Method': 'lock',
        },
        images: {
        },
        minCollision: 60,
        neo4jDataUrl: from,
        nodeRadius: 25,
        onNodeDoubleClick: function(node) {

            switch(node.id) {
                case '25':
                    // Google
                    window.open(node.properties.url, '_blank');
                    break;
                default:
                    var maxNodes = 5,
                        data = neo4jd3.randomD3Data(node, maxNodes);
                    neo4jd3.updateWithD3Data(data);
                    break;
            }
        },

        zoomFit: true
    });
</script>

</html>