<?php if (!empty($success)) {
    echo $success;
} ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rooms</h4>
                <a href="<?php echo site_url('room/create/'); ?>" class="btn btn-secondary"><i
                        class="nc-icon nc-simple-add"></i> Add Room</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table display" style="width:100%">
                        <thead class="text-secondary">
                            <tr>
                                <!-- <th class="text-left">Room ID</th> -->
                                <th class="text-left">Room Number</th>
                                <th class="text-left">Room Type</th>
                                <th class="text-left">Price</th>
                                <th class="text-left">Status</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($rooms)): ?>
                                <?php foreach ($rooms as $room): ?>
                                    <tr>
                                        <!-- <td class="text-left"><?php echo $room->room_id; ?></td> -->
                                        <td class="text-left"><?php echo $room->room_number; ?></td>
                                        <td class="text-left"><?php echo $room->room_type; ?></td>
                                        <td class="text-left"><?php echo format_rupiah($room->price); ?></td>
                                        <td
                                            class="<?php echo $room->status === 'Available' ? 'text-success' : 'text-danger'; ?>">
                                            <?php echo $room->status; ?>
                                        </td>

                                        <td class="text-right">
                                            <a href="<?php echo site_url('room/edit/' . $room->room_id); ?>"
                                                class="text-warning mx-3"><i class="nc-icon nc-single-02"></i></a>
                                            <a href="<?php echo site_url('room/delete/' . $room->room_id); ?>"
                                                class="text-danger mx-3" onclick="return confirm('Are you sure?')"><i
                                                    class="nc-icon nc-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">No rooms found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>