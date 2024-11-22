<?php if (!empty($success)) {
    echo $success;
} ?>
<div class="row">
    <div class="col-md-12" s>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Check-In</h4>
                <a href="<?php echo site_url('guestcheckin/create/'); ?>" class="btn btn-secondary"><i
                        class="nc-icon nc-simple-add"></i> Check in</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="checkin" class="table display" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Guest Name</th>
                                <th class="text-left">Room Number</th>
                                <th>Check-In Date</th>
                                <th>Check-Out Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($checkins as $checkin): ?>
                                <tr>
                                    <!-- <td><?php echo $checkin->check_id; ?></td> -->
                                    <td><?php echo $checkin->name; ?></td>
                                    <td class="text-left"><?php echo $checkin->room_number; ?></td>
                                    <td>
                                        <?php
                                        echo isset($checkin->checkin_date)
                                            ? date('d F Y, h:i A', strtotime($checkin->checkin_date))
                                            : 'N/A';
                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                        echo isset($checkin->checkout_date)
                                            ? date('d F Y, h:i A', strtotime($checkin->checkout_date))
                                            : 'N/A';
                                        ?>
                                    </td>

                                    <td
                                        class="<?php echo $checkin->status === 'checked_in' ? 'text-success' : 'text-danger'; ?>">
                                        <?php echo $checkin->status; ?>
                                    </td>

                                    <td>
                                        <?php if ($checkin->status == 'checked_in'): ?>
                                            <a href="<?php echo site_url('guestcheckin/checkout/' . $checkin->check_id); ?>"
                                                class="btn btn-warning btn-sm">Check Out</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>