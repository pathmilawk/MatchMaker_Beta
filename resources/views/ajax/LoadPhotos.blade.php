 @foreach($image as $key)
     <table width="500px">
         <tr style="padding: 20px">
            <td style="padding: 20px"><img src="{{asset('Uploaded_photos/'.$key->userID.'/'.$key->photo)}}" alt="" width="200px" height="200px"></td>
             <td style="padding: 20px"></td>
             <td style="padding: 20px"><input type="checkbox" name="photoSelected" value="{{$key->photo}}" ></td>
         </tr>
     </table>
@endforeach


