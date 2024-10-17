<html>

<head>
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/jqueryui/jquery-ui.js" rel="stylesheet">
    <script src="./assets/jquery.js"></script>
    <script src="./assets/jqueryui/jquery-ui.min.js"></script>
    <title> tittle </title>
    <script>
        $(init);

        function init() {
            var diagram = [];
            var canvas = $(".canvas");
            var tools = $(".tools");
            $(".tool").draggable({
                helper: "clone"
            });
            canvas.droppable({
                drop: function(event, ui) {
                    // alert("tool was dropped");
                    var node = {
                        _id: (new Date).getTime(),
                        position: ui.helper.position()
                    };
                    // node.position.left-=tools.width();
                    if (ui.helper.hasClass("tool-1")) {
                        node.type = "TOOL-1";
                    } else if (ui.helper.hasClass("tool-2")) {
                        node.type = "TOOL-2";
                    } else if (ui.helper.hasClass("tool-3")) {
                        node.type = "TOOL-3";
                    }
                    else{
                        return;
                    }
                    diagram.push(node);
                    renderDiagram(diagram);
                }
            });

            function renderDiagram(diagram) {
                canvas.empty();
                for (var d in diagram) {
                    var node = diagram[d];
                    var html="";
                    if(node.type === "TOOL-1"){
                    html = "<h3>TOOL 1<h3>";
                    }
                    else if(node.type === "TOOL-2"){
                    html = "<h3>TOOL 2<h3>";
                    }
                    else if(node.type === "TOOL-3"){
                    html = "<h3>TOOL 3<h3>";
                    }

                    var dom = $(html).css({
                        "position":"absolute",
                        "top": node.position.top,
                        "left": node.position.left,
                    }).draggable({
                        stop: function(event, ui){
                            console.log(ui);
                            var id= ui.helper.attr("id");
                            for(i in diagram){
                                if (diagram[i]._id == id){
                                    diagram[i].top= ui.position.top;
                                    diagram[i].left= ui.position.left;
                                }
                            }
                        }
                    }).attr("id",node._id);
                    canvas.append(html);
                }
            }
        };
    </script>
    <style>
        h3 {
            border: 2px solid gray;
            border-radius: 5px;
            padding: 5x;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="container.fluid">
        <h1>
            Hello
        </h1>
        <div class="row">
            <div class="col-md-6 tools" style="background-color: pink">
                <h2> 1st part </h2>
                <h3 class="tool tool-1"> tool 1 </h3>
                <h3 class="tool tool-2"> tool 2 </h3>
                <h3 class="tool tool-3"> tool 3 </h3>
            </div>
            <div class="col-md-6 canvas" style="background-color: beige;">
                <h2> 2nd part</h2>
            </div>
        </div>
    </div>
    <!-- <script>
        jQuery(init);

        function init() {
            alert("hello this is test");
        };
    </script> -->
    <script src="/public/assets/bootstrap/js/bootstrap.js"> </script>
    <!-- <script src="/asset/bootstrap/js/bootstrap.js"> </script> -->
</body>

</html>