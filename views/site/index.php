<div class="main">
    <div class="header">�����б�</div>
    <table class="mytable table table-bordered table-striped table-hover" id="article">
        <thead>
        <tr>
            <th>���</th>
            <th>�������ķ�����</th>
            <th>��������</th>
            <th>��ʼʱ��</th>
            <th>����ʱ�� </th>
            <th>pps</th>
            <th>kbps</th>
            <th>pktlen</th>
            <th>attacker_ipcnt</th>
            <th>attacker_iplist</th>
            <th>atacker_ipcnt</th>
            <th>�������</th>
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
                "sInfo": "��_TOTAL_�����ݣ�չʾ_START_��_END_������",
                "sInfoEmpty": "������",
                "sInfoFiltered": "(��_MAX_�������еĲ�ѯ)",
                "sLengthMenu": "ÿҳ��ʾ _MENU_ ������",
                "sSearch":  "���� _INPUT_ ",
                "sZeroRecords": " ",
                "oPaginate":{
                    "sPrevious":"��һҳ",
                    "sNext":"��һҳ",
                    "sLast":"βҳ",
                    "sFirst":"��ҳ"
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