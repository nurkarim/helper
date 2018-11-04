<?php
namespace App\CustomClasses;


class ReturnMessage
{

    public static function emptyData(){
        return redirect()->back()->with('error','item not found in cart!');
    } 
     public static function cartDelete(){
        return redirect()->back()->with('info','item deleted successfully!');
    }
    public static function cartUpdate(){
        return redirect()->back()->with('info','quentity update successfully!');
    } 

    public static function cartDestory(){
        return redirect()->back()->with('info','cart empty successfully!');
    }
    public static function attendanceSuccess(){
        return redirect()->back()->with('success','Attendance Taken successfully!');
    }
     public static function purchase(){
        return redirect()->back()->with('success','purchase successfully!');
    }
    public static function insertSuccess(){
        return redirect()->back()->with('success','Data saved successfully!');
    }
    public static function updateSuccess(){
        return redirect()->back()->with('success','Data updated successfully!');
    }
    public static function deleteSuccess(){
        return redirect()->back()->with('success','Data deleted successfully!');
    }
    public static function duplicate(){
        return redirect()->back()->with('error','Duplicate records found!');
    }
    public static function somethingWrong(){
        return redirect()->back()->with('error','Something wrong!');
    }  
    public static function JsonsomethingWrong(){
        return response()->json(['status'=>'error','message'=>'Something wrong!']);
    }
    public static function jsonInsertSuccess(){
        return response()->json(['status'=>'success','message'=>'Data saved successfully !']);
    }
    public static function jsonUpdateSuccess(){
        return response()->json(['status'=>'success','message'=>'Data updated successfully !']);
    }
    public static function jsonDeleteSuccess(){
        return response()->json(['status'=>'success','message'=>'Data deleted successfully !']);
    }
    public static function jsonDuplicate(){
        return response()->json(['status'=>'error','message'=>'Duplicate records found !']);
    }
    public static function jsonDeleteException(){
        return response()->json(['status'=>'error','message'=>'Already used. can\'t delete it.']);
    }
}