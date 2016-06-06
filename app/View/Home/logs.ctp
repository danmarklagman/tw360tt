<?php echo $this->start('title'); ?>
Time Logs
<?php echo $this->end(); ?>
<?php $this->Html->addCrumb('Logs'); ?>

<div class="panel panel-default">
    <div class="panel-heading">Time Logs</div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>Log Type</th>
                        <th>Log Time</th>
                        <th>Log Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Time In</td>
                        <td>07:00 AM</td>
                        <td>June 02, 2016</td>
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