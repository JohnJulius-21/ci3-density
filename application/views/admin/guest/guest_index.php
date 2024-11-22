<?php if (!empty($success)) {
    echo $success;
} ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Guests</h4>
                <a href="<?php echo site_url('guest/create/'); ?>" class="btn btn-secondary"><i
                        class="nc-icon nc-simple-add"></i>  Add Guest</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="guest" class="table display" style="width:100%">
                        <thead class="text-secondary">
                            <tr>
                                <th>Guest ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th class="text-left">Phone Number</th>
                                <th class="text-left">Identity Type</th>
                                <th class="text-left">Identity Number</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($guests)): ?>
                                <?php foreach ($guests as $guest): ?>
                                    <tr>
                                        <td class="text-left"><?php echo $guest->guest_id; ?></td>
                                        <td><?php echo $guest->name; ?></td>
                                        <td><?php echo $guest->address; ?></td>
                                        <td><?php echo $guest->city; ?></td>
                                        <td class="text-left"><?php echo $guest->phone_number; ?></td>
                                        <td class="text-left"><?php echo $guest->identity_type; ?></td>
                                        <td class="text-left"><?php echo $guest->identity_number; ?></td>
                                        <td class="text-right">
                                            <a href="<?php echo site_url('guest/edit/' . $guest->guest_id); ?>"
                                                class="text-warning mx-2"><i class="nc-icon nc-single-02"></i></a>
                                            <a href="<?php echo site_url('guest/delete/' . $guest->guest_id); ?>"
                                                class="text-danger mx-2"
                                                onclick="return confirm('Are you sure you want to delete this guest?');"><i
                                                    class="nc-icon nc-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">No guests found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>