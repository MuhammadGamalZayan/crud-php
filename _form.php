<form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="nameHelp" value="<?php echo $user['name'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $user['username'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $user['phone']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputWebsite">Website</label>
                    <input type="text" class="form-control" name="website" id="exampleInputWebsite" value="<?php echo $user['website'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputWebsite">Image</label>
                    <input type="file" name="picture" class="form-control" id="exampleInputWebsite" >
                </div>
                <div class="row">
                    <div class="col-6 text-center">
                        <input type="submit" class="btn btn-primary"></input>
                    </div>
                    <div class="col-6 text-center">
                        <a href="view.php?id=<?php echo $userId ?>" class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
                
            </form>