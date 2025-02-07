package com.example.projecttestone

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.google.android.material.textfield.TextInputEditText

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_main)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }
    }
    fun startProgram(view: View){
        val intent = Intent(this,telaInicio::class.java);

        val nameUser = findViewById<TextInputEditText>(R.id.nameUser).text.toString().trim();
        val nameLayout = findViewById<TextView>(R.id.campError);

        if (nameUser.isEmpty()){
            nameLayout.setText("É necessario preencher o campo de nome")
        }

        else {
            intent.putExtra("NAME_USER", nameUser);
            nameLayout.setText("");
            startActivity(intent);
        }
    }
}