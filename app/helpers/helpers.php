<?php

// session_start();

/**
 * This function is used to display flash messages
 *
 * @param string $name The name of the flash message
 * @param string $message The message to be displayed
 * @param string $class The CSS class of the message box
 */
function flashMsg(string $name = '', string $message = '', string $class = 'alert alert-success'): void
{
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if (!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } elseif (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

// ALERT MESSAGE
function alert($type = NULL, $message = NULL, $textColor = 'dark')
{
    echo <<<alert
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container top-0 end-0 p-3">
                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header d-flex justify-content-between align-items-center">
                        <strong class="mr-auto">$type</strong>
                        <div>
                            <small class="text-muted">Just Now</small>
                            <button type="button" class="ml-2 mb-1 btn-close shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="toast-body text-uppercase text-$textColor">
                        $message
                    </div>
                </div>
            </div>
        </div>
   alert;
}

/**
 * Check if the user is logged in
 *
 * @return bool true if the user is logged in, false otherwise
 */
function isLoggedInUser(): bool
{
    if (isset($_SESSION['email'])) {
        return true;
    }

    return false;
}

function isUser()
{
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'customer') {
        return true; // Ensure a return value after redirect
    } else {
        return false;
    }
}

function isAdmin()
{
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
        return true; // Ensure a return value after redirect
    } else {
        return false;
    }
}

function ifNot($condition, $redirectTo)
{
    if (!$condition) {
        redirect($redirectTo);
        return true;
    }
    return false;
}

// Checks if user is logged in
function isLoggedIn()
{
    if (isset($_SESSION['userid'])) {
        return true;
    } else {
        return false;
    }
}

/**
 * This function is used to redirect the user to a specific page
 *
 * @param string $page The page to be redirected to
 */
function redirect(string $page): void
{
    header("Location: " . URLROOT . "/" . $page);
}

/**
 * This function is used to filter user input data
 *
 * @param array $type The input data to be filtered
 * @return array The filtered input data
 */
function filteration(array $type): array
{
    foreach ($type as $key => $value) {
        // Trim leading and trailing spaces
        $value = trim($value);
        // Remove backslashes
        $value = stripslashes($value);
        // Remove HTML tags
        $value = strip_tags($value);
        // Encode special characters in a string
        $value = htmlspecialchars($value);
        // Assign the filtered value back to the original array
        $type[$key] = $value;
    }
    return $type;
}

/**
 * This function is used to upload an image
 *
 * @param string $img_name The name of the image input field
 * @param string $path The path where the image should be uploaded
 * @return string The name of the uploaded image
 */
function imageUpload(string $img_name, string $path)
{
    $ext = pathinfo($_FILES[$img_name]['name'], PATHINFO_EXTENSION);
    $image = 'P-' . random_int(1111111, 9999999) . '.' . $ext;

    // Filesystem path for saving the file
    $fsPath = dirname(APPROOT) . '/public/assets/images/' . trim($path, '/\\') . '/';

    // URL path for storing in database
    $urlPath = '/assets/images/' . trim($path, '/') . '/' . $image;

    // Create directory if it doesn't exist
    if (!is_dir($fsPath)) {
        @mkdir($fsPath, 0777, true);
    }

    if (move_uploaded_file($_FILES[$img_name]['tmp_name'], $fsPath . $image)) {
        return $urlPath;
    } else {
        error_log('Upload error: ' . print_r(error_get_last(), true));
        alert('message', 'Image Upload Error');
        return null;
    }
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_input(): void
{
    $t = htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8');
    echo '<input type="hidden" name="csrf_token" value="' . $t . '">';
}

function csrf_verify($token): bool
{
    if (!is_string($token) || empty($_SESSION['csrf_token'])) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

function isUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

// die($_SERVER['REQUEST_URI']);

// PHP code to extract IP 
function getVisitorIpAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

function random_num($length)
{
    $number = "";
    $len = rand($length, $length);

    for ($i = 0; $i < $len; $i++) {
        $number .= rand(2, 9);
    }
    return $number;
}
