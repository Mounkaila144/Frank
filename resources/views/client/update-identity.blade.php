<x-client.maindashboard>
    <x-slot name="title">
        Ijrili | Update-identity
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>

    <x-slot name="content">
        <div class="aon-admin-heading">
            <h4>Edit Profile</h4>
        </div>


        <div class="card aon-card">
            <div class="card-header aon-card-header"><h4><i class="fa fa-user"></i> Upload Identity Proof</h4>
            </div>

            <div class="card-body aon-card-body">
                <div class="alert alert-warning m-b30">
                    Document verification process is going on.
                </div>
                <form action="https://aonetheme.com/sf-html-demo/upload.php" class="dropzone dropzone-custom m-b30">
                    <div class="dz-message">
                                <span class="note">
                                    Upload Front side document
                                </span>
                    </div>
                </form>
                <form action="https://aonetheme.com/sf-html-demo/upload.php" class="dropzone dropzone-custom">
                    <div class="dz-message">
                                <span class="note">
                                    Upload Back side document
                                </span>
                    </div>
                </form>
            </div>



        </div>
    </x-slot>

</x-client.maindashboard>
