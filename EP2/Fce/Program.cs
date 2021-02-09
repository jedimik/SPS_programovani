using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Fce
{
    class Program
    {
        static void Main(string[] args)
        {
            //vypis(9,"Vypisuji");
            //vypis(5, "*");
            //printni("Jak se mas");
            //int vysledek = Soucet(10, 5);
            //Printni(vysledek.ToString());
            /*
            Vypis(4, "Vypisuji*");
            Vypis(3, "Nevypisuji*");
            Vypis(7, "Nedavam pozor*");
            Vypis(5, "Omlouvam se, uz ho davat budu*");*/
            Soucet1(10, 5);
            int vysledek = Soucet(10, 5);
            vysledek += Soucet(10, 5);
            Printni(vysledek.ToString());
            Console.ReadKey();

        }

        //Bez navratove hodnoty
        static void Vypis(int pocet,string str)
        {
            for (int i = 0; i < pocet; i++)
            {
                Printni(str);
            }
        }
        static void Soucet1(int A, int B)
        {
            int soucet = A + B;
            Printni(soucet.ToString());
        }

        static void Printni(string str)
        {
            Console.WriteLine(str);
        }
        // S navratovou hodnotou

        static int VratInt(int vstup)
        {
            int vystup = vstup + 10;
            return vystup;
        }
        static int Soucet(int A, int B)
        {
            int soucet = A + B;
            return soucet;
        }
    }
   
}
