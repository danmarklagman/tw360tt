<?php echo $this->start('title'); ?>
Attendance
<?php echo $this->end(); ?>
<?php $this->Html->addCrumb('Attendance'); ?>

<div class="panel panel-default">
    <div class="panel-heading">Today's Attendance (June 02, 2016)</div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Employee</th>
                        <th>Status</th>
                        <th>Log Time</th>
                        <th>Office</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DM17</td>
                        <td>Dan Mark P. Lagman</td>
                        <td>Time In</td>
                        <td>07:00 AM</td>
                        <td>Extension Office</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel-footer">
        
    </div>
</div>

<?php echo $this->start('footerScripts'); ?>
<script type="text/javascript">
$('.data-table').dataTable();
</script>
<?php echo $this->end(); ?>