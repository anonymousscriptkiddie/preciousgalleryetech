// pages/api/log-visit.js
import { createClient } from '@supabase/supabase-js'

const supabase = createClient(
  process.env.SUPABASE_URL,
  process.env.SUPABASE_ANON_KEY
)

export default async function handler(req, res) {
  // Insert a new visit into the visits table
  const { data, error } = await supabase
    .from('visits')
    .insert([{ visit_time: new Date() }]);

  // If there was an error, return it
  if (error) {
    return res.status(500).json({ error: error.message });
  }

  // Return success message
  res.status(200).json({ message: 'Visit recorded successfully!' });
}
