<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\List_todo;
use Exception;
use Illuminate\Support\Facades\DB;
use stdClass;

class List_todo_controller extends Controller
{
    public function getAllToDo(Request $request)
    {
        try {
            $limit = $request->get("limit") === null ? 3 : $request->get("limit");
            $page = $request->get("page") === null ? 1 : $request->get("page");
            $offset = $page >= 1 ? 0 + (($page - 1) * $limit) : 0;
            DB::beginTransaction();
            try {
                $dataall = List_todo::all();
                $data = DB::select('select * from list_todos ORDER BY date DESC LIMIT ? OFFSET ?', [$limit, $offset]);
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw $e;
            }
            $meta = new stdClass();
            $meta->next = count($dataall) <= 0 ? null : ($page == ceil(count($dataall) / $limit) ? null : $page + 1);
            $meta->prev = $page == 1 ? null : $page - 1;
            $meta->last_page = ceil(count($dataall) / $limit);
            $meta->total = count($dataall);
            return response()->json((array("code" => 200, "status" => "OK", "data" => $data, "meta" => $meta)), 200);
        } catch (Exception $err) {
            return response()->json(array(
                "code" => 400, "status" => "error", "message" => $err->getMessage()
            ), 400);
        }
    }

    public function postToDo(Request $request)
    {
        try {
            $date = $request->get("date");
            $list_todo = $request->get("list_todo");
            $check =  List_todo::where('date', $date)->get();
            if (count($check) !== 0) {
                return response()->json(array(
                    "code" => 400, "status" => "error", "message" => "the date already exists."
                ), 400);
            };
            DB::beginTransaction();
            try {
                foreach ($list_todo as $value) {
                    List_todo::create([
                        'date' => $date,
                        'todo' => $value
                    ]);
                }
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw $e;
            }
            return response()->json((array("code" => 200, "status" => "OK", "message" => "insert successful.")), 200);
        } catch (Exception $err) {
            return response()->json(array(
                "code" => 400, "status" => "error", "message" => $err->getMessage()
            ), 400);
        }
    }

    public function deleteToDo(Request $request)
    {
        try {
            $bydate = $request->get("bydate");
            $byid = $request->get("byid");
            $check =  List_todo::where('date', $bydate)->orwhere('id', $byid)->get();
            if (count($check) === 0) {
                return response()->json(array(
                    "code" => 400, "status" => "error", "message" => "id or date not found."
                ), 400);
            };
            if ($bydate === null && $byid === null) {
                return response()->json(array(
                    "code" => 400, "status" => "error", "message" => "query params id or date is required."
                ), 400);
            };
            DB::beginTransaction();
            try {
                DB::delete('delete from list_todos where date = ? or id = ?', [$bydate, $byid]);
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw $e;
            }
            return response()->json((array("code" => 200, "status" => "OK", "message" => "delete successful.")), 200);
        } catch (Exception $err) {
            return response()->json(array(
                "code" => 400, "status" => "error", "message" => $err->getMessage()
            ), 400);
        }
    }

    public function putToDo(Request $request)
    {
        try {
            $bydate = $request->get("bydate");
            $byid = $request->get("byid");
            $date = $request->get("date");
            $todo = $request->get("todo");
            $list_todo = $request->get("list_todo");
            $check =  List_todo::where('date', $bydate)->orwhere('id', $byid)->get();
            if (count($check) === 0) {
                return response()->json(array(
                    "code" => 400, "status" => "error", "message" => "id or date not found."
                ), 400);
            };
            if ($bydate === null && $byid === null) {
                return response()->json(array(
                    "code" => 400, "status" => "error", "message" => "query params id or date is required."
                ), 400);
            };
            if ($bydate !== null && $byid !== null) {
                return response()->json(array(
                    "code" => 400, "status" => "error", "message" => "use one of the query params of id or date."
                ), 400);
            };
            DB::beginTransaction();
            try {
                if ($bydate !== null) {
                    if ($list_todo === null || count($list_todo) === 0) {
                        return response()->json(array(
                            "code" => 400, "status" => "error", "message" => "body list_todo must be filled in."
                        ), 400);
                    };
                    DB::delete('delete from list_todos where date = ?', [$bydate]);
                    foreach ($list_todo as $value) {
                        List_todo::create([
                            'date' => $bydate,
                            'todo' => $value
                        ]);
                    }
                } else {
                    DB::update('update list_todos set todo = ?, date = ? where id = ?', [$todo, $date, $byid]);
                }
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                throw $e;
            }
            return response()->json((array("code" => 200, "status" => "OK", "message" => "update successful.")), 200);
        } catch (Exception $err) {
            return response()->json(array(
                "code" => 400, "status" => "error", "message" => $err->getMessage()
            ), 400);
        }
    }
}
