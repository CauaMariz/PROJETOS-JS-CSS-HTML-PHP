package com.example.projecttestone

import android.os.Bundle
import android.view.View
import android.widget.EditText
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.google.android.material.textfield.TextInputEditText
import org.w3c.dom.Text

class telaInicio : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_tela_inicio2)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }
        val nameUser = intent.getStringExtra("NAME_USER");
        val campWelcomeUser = findViewById<TextView>(R.id.campWelcomeUser);
        campWelcomeUser.setText("Bem vindo $nameUser!");
    }


    fun media(view: View){
        val num1 = findViewById<EditText>(R.id.nota1).text.toString().toDouble();
        val num2 = findViewById<EditText>(R.id.nota2).text.toString().toDouble();
        val media = (num1 + num2) / 2;
        val camp = findViewById<TextView>(R.id.campMedia);
        camp.setText("Média do aluno: %.2f" . format(media));

    }

}

