using System;

namespace Ejemplo01
{
    class Program
    {
        static void Main(string[] args)
        {
            // Definicion/Declaracion de variables variables
            byte num1;
            sbyte num2;
            short num3;
            int num4;
            ulong num5;
            double peso;
            char genero;
            string nombre;
            bool esActivo;

            //asignacion variables
            num1 = 25;
            num2 = -120;
            num3 = 30000;
            num4 = 45700000;
            num5 = 18446744073709551615;
            peso = 54.84;
            genero = 'f';
            nombre = "pedro 123 ~$";
            esActivo = true;

            //declaracion y asignacion en una sola linea
            ushort num6 = 75;
            decimal sueldo =(decimal)1500000.45;

            //Operaciones salida
            Console.WriteLine("Hello World!");
            Console.WriteLine("el valor del numero 1 es: " + num1);
            Console.WriteLine("Valor de num2 es: " + num2 + " y num3 es: " + num3);

        }
    }
}
