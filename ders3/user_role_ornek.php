<?php
$role = "editor";
/*  $role = "admin";
$role = "user";
$role = "guest"; */
?>


<!DOCTYPE html>
<html>
<head>
<title>Role Based Page</title>
</head>
<body>

<h1>Welcome to the Website</h1>

<?php

if ($role == "admin") {
    echo "<h2>Admin Panel</h2>";
    echo "<p>You can manage the entire website.</p>";
    
    echo "<button>Dashboard</button>";
    echo "<button>Manage Users</button>";
    echo "<button>Settings</button>";
}

elseif ($role == "editor") {
    echo "<h2>Editor Page</h2>";
    echo "<p>You can edit website content.</p>";
    
    echo "<button>Edit Posts</button>";
    echo "<button>Add New Post</button>";
}

elseif ($role == "user") {
    echo "<h2>User Dashboard</h2>";
    echo "<p>Welcome to your user page.</p>";
    
    echo "<button>Profile</button>";
    echo "<button>My Orders</button>";
}

else {
    echo "<h2>Access Denied</h2>";
    echo "<p>You do not have permission to view this page.</p>";
}

?>

</body>
</html>