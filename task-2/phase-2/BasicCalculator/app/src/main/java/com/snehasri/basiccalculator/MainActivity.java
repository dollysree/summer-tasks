package com.snehasri.basiccalculator;

import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.util.regex.Pattern;


public class MainActivity extends ActionBarActivity {
    private TextView _screen;
    private String display = "";
    private String currentOperator = "";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        _screen = (TextView)findViewById(R.id.textView);
        _screen.setText(display);
    }
    private void updateScreen(){
        _screen.setText(display);
    }

    public void onClickNumber(View v){

        Button b = (Button) v;
        display += b.getText();
        updateScreen();
    }
    public void onClickOperator(View v){
        if(display == "") return;
        if(currentOperator != "")return;
        Button b = (Button)v;
        display += b.getText();
        currentOperator = b.getText().toString();
        updateScreen();
    }
    private void clear(){
        display = "";
        currentOperator = "";

    }

    public void onClickClear(View v){
        clear();
        updateScreen();
    }

    private double operate(String a, String b, String op){
        switch (op){
            case "+": return Double.valueOf(a) + Double.valueOf(b);
            case "-": return Double.valueOf(a) - Double.valueOf(b);
            case "×": return Double.valueOf(a) * Double.valueOf(b);
            case "÷": try{
                return Double.valueOf(a) / Double.valueOf(b);
            }catch (Exception e){
                Log.d("Calc", e.getMessage());
            }
            default: return -1;
        }
    }
    public void onClickEqual(View v){
        if(currentOperator == "")return;

        String[] operation = display.split(Pattern.quote(currentOperator));
        if(operation.length < 2) return;
        Double _result = operate(operation[0], operation[1], currentOperator);
        _screen.setText(display + "\n" + String.valueOf(_result));
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
