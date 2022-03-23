<div class="row">
    <div class='col-md-12'>
        <h2>Customers</h2>
        <table class="table" id="customer_table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>City</td>
                    <td>Details</td>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($customers as $customer):
?>
                <tr>
                    <td><?php echo $customer->customerName ?></td>
                    <td><?php echo $customer->phone ?></td>
                    <td><?php echo $customer->city ?></td>
                    <td><a class="btn btn-primary employee_details"
                            href="<?php echo base_url() ?>/home/customer/<?php echo $customer->customerNumber ?>">details</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $("#customer_table").dataTable();
});
</script>