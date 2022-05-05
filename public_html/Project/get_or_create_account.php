<?php

/**
 * Will fetch the account of the logged in user, or create a new one if it doesn't exist yet.
 * Exists here so it may be called on any desired page and not just login
 * Will populate/refresh $_SESSION["user"]["account"] regardless.
 * Make sure this is called after the session has been set
 */
function get_or_create_account()
{
    if (is_logged_in()) {
        //let's define our data structure first
        //id is for internal references, account_number is user facing info, and balance will be a cached value of activity
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account, balance from Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => get_user_id()]);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            if (!$result) {
                //account doesn't exist, create it
                try {
                    //my table should automatically create the account number so I just need to assign the user
                    $query = "INSERT INTO Accounts (user_id, account_type, account_number) VALUES (:uid, :accType, NULL)";
                    $user_id = get_user_id(); //caching a reference
                    $stmt = $db->prepare($query);
                    $stmt->execute([":uid" => $user_id]);
                    flash("Welcome! Your account has been created successfully", "success");
                    $account["id"] = $db->lastInsertId();
                    //this should mimic what's happening in the DB without requiring me to fetch the data
                    $account["account_number"] = str_pad($account["id"], 12, "0", STR_PAD_LEFT);
                    $query = "UPDATE Accounts SET account_number = :account_number where id = :id";

                } catch (PDOException $e) {
                    flash("An error occurred while creating your account", "danger");
                    error_log(var_export($e, true));
                }
            } else {
                //$account = $result; //just copy it over
                $account["id"] = $result["id"];
                $account["account_number"] = $result["account"];
                $account["balance"] = $result["balance"];
            }
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        //$_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
        //Note: if there's an error it'll initialize to the "empty" definition around line 161

    } else {
        flash("You're not logged in", "danger");
    }
}