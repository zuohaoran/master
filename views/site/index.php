<div class="main">
    <div class="header">入库表列表</div>
    <table class="mytable table table-bordered table-striped table-hover" id="article">
        <thead>
        <tr>
            <th>序号</th>
            <th>被攻击的服务器</th>
            <th>攻击类型</th>
            <th>起始时间</th>
            <th>结束时间 </th>
            <th>pps</th>
            <th>kbps</th>
            <th>pktlen</th>
            <th>attacker_ipcnt</th>
            <th>attacker_iplist</th>
            <th>atacker_ipcnt</th>
            <th>处理情况</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($list as $value) {
            echo "<tr>";
            echo "<td>".$value['id']."</td>";
            echo "<td>".$value['victim_ip']."</td>";
            echo "<td>".$value['attack_type']."</td>";
            echo "<td>".$value['start_time']."</td>";
            echo "<td>".$value['end_time']."</td>";
            echo "<td>".$value['pps']."</td>";
            echo "<td>".$value['kbps']."</td>";
            echo "<td>".$value['pktlen']."</td>";
            echo "<td>".$value['attacker_ipcnt']."</td>";
            echo "<td>".$value['attacker_iplist']."</td>";
            echo "<td>".$value['atacker_ipcnt']."</td>";
            echo "<td>".$value['process_status']."</td>";
            echo "</tr>";
        }
        ?>
        <?= LinkPager::widget(['pagination' => $pages]); ?>
        </tbody>
    </table>

    <script type="text/javascript">
        $("#article").dataTable({
            //"lengthChange": false,
            "dom": 't<"col-sm-5"i>p',
            //"ordering": false,
            "sPaginationType": "full_numbers",
            "oLanguage": {
                "sInfo": "共_TOTAL_条数据，展示_START_到_END_条数据",
                "sInfoEmpty": "无数据",
                "sInfoFiltered": "(从_MAX_条数据中的查询)",
                "sLengthMenu": "每页显示 _MENU_ 条数据",
                "sSearch":  "查找 _INPUT_ ",
                "sZeroRecords": " ",
                "oPaginate":{
                    "sPrevious":"上一页",
                    "sNext":"下一页",
                    "sLast":"尾页",
                    "sFirst":"首页"
                },
            },
            "iDisplayLength":10,
//    "columnDefs": [ {
//      "targets": [10, 11,12,13 ],
//      "orderable": false
//    } ],
            "order": [[0,'asc']]
        });

    </script>
</div>